<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ProfessionExport;
use App\Imports\ProfessionsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professions = profession::all();
        return view('professions.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profession = request()->all();
        if($img = $request->file('image')){
            $destinationPath = 'images/professions/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $profession['image'] = "$name";
    }
    Profession::create($profession);
    return redirect()->to(url('/professions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function show(Profession $profession)
    {
        return view('professions.show', compact('profession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function edit(Profession $profession)
    {
        return view('professions.edit', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profession $profession)
    {
        $dataProfession = request()->except('_toke');
        $profession->update($dataProfession);
        return redirect()->to(url('/professions'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profession $profession)
    {
        $profession->delete();
        return redirect()->to(url('/professions'));
    }
    public function exportProfessionsToCSV(Request $request){
        $fileName= 'professions.csv';
        $professions = Profession::all();

        $headers = array(
            "Content-type"              => "text/csv",
            "Content-Disposition"       => "attachment; fileName=$fileName",
            "Pragma"                    => "no-cache",
            "Cache-Control"             => "must-revalidate, post-check=0, pre-check=0",
            "Expires"                   => "0"
        );

        $columns = array('Nombre completo', 'Edad en años', 'Professión', 'Número telefónico',
         'Año trabajando en ello', 'Le gusto por', 'Descripción', 'Comentario');

         $callback = function() use($professions, $columns){
             $file = fopen('php://output', 'w');
             fputcsv($file, $columns);

             foreach($professions as $profession){
                 $row['name']                   = $profession->name;
                 $row['ageyears']               = $profession->ageyears;
                 $row['profession']             = $profession->profession;
                 $row['phonenumber']            = $profession->phonenumber;
                 $row['yearsworking']           = $profession->yearsworking;
                 $row['inherited']              = $profession->inherited;
                 $row['description']            = $profession->description;
                 $row['commentcarr']            = $profession->commentcarr;

                 fputcsv($file, array($row['name'],  $row['ageyears'], $row['profession'],  $row['phonenumber'],
                 $row['yearsworking'], $row['inherited'], $row['description'], $row['commentcarr']));
             }
             fclose($file);
         };
         return response()->stream($callback, 200, $headers);
    

    }

    public function chart(){

        $professions=Profession::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Second(created_at)"))
        ->pluck('count');
 
        $professions2=Profession::select(\DB::raw("COUNT(*) as count"))
         ->whereBetween('yearsworking', ([0, 40]))
         ->groupBy(\DB::raw("yearsworking"))
         ->pluck('count');
 
         return view('professions.chart')
         ->with('professions', $professions)
         ->with('professions2', $professions2);
     }
     public function cards(){
        $professions = Profession::all();
        return view('professions.cards', compact('professions'));
    }
    public function exportToXlsx(){
        return Excel::download(new ProfessionExport, 'professions.xlsx');
    }
    public function import(){
        return view('professions.import');
      }
      public function importData(Request $request){
          Excel::import(new ProfessionsImport, request()->file('excel'));
          return redirect()->to(url('professions'));
  
      }
    
}
