<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;

use Request;
use App\Http\Requests\ReportRequest;

use App\Report;
use Auth;

class ReportController extends Controller {


	function __construct() {

		$this->middleware('auth');
	
	}

	public function create()
	{

		$category_list = \App\ReportCategory::orderBy('category')->lists('category', 'id');
		$timeline_list = \App\ReportTimeline::orderBy('slug')->lists('slug', 'id');

		return view('sky.report.create', compact('category_list', 'timeline_list'));
	}

	public function index()
	{
		$reports = Report::all();
		


		return view('sky.report.index', compact('reports'));
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ReportRequest $request)
	{
		

		if (Request::hasFile('path'))
		{
			$report = new Report;
			
			$report->title = $request->get('title');
			$report->desc = $request->get('desc');
			$report->tag = $request->get('tag');
			$report->category_id = $request->get('category_id');
			$report->timeline_id = $request->get('timeline_id');

			$file = $request->file('path');

			// return [
			// 	'path' => $file->getRealPath(),
			// 	'size' => $file->getSize(),
			// 	'mime' => $file->getMimeType(),
			// 	'name' => $file->getClientOriginalName(),
			// 	'extension' => $file->getClientOriginalExtension()
			// ];
			
			$file = $file->move(storage_path().'/reports/', time().'-'.$file->getClientOriginalName());

			$report->path = $file->getRealPath();
			
			Auth::user()->reports()->save($report);

			return redirect()->route('report.index');
		}

		

		return 'false';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
