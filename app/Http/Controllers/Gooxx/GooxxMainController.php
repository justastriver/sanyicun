<?php namespace App\Http\Controllers\Gooxx;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Log;
use Session;


class GooxxMainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
			$name = $request->input('name');
			$name = urldecode($name);
			 Log::info('name is '.$name);
			$docs = array(
				array(
					"person"=>"梅长苏",
					"photo"=>"mcs",
					"description"=>"梅长苏，海宴小说《琅琊榜》主人公，全书灵魂人物。琅琊榜首，江左梅郎，天下第一大帮江左盟宗主，前为赤焰军少帅林殊，才华无双，后因梅岭惨案，身中火寒之毒，改名换面，蛰伏江湖。虽缠绵病体，但容颜灵秀，气质清雅，心怀赤子，精通音律，才冠绝伦，蝉居琅琊公子榜榜首。为平多年冤案，他以一介白衣之身，化名苏哲回到金陵帝都，以病弱之躯涉入种种纷争，成为朝堂多方争相招揽的对象，走上了雪冤与复仇之路。",
				),
				array(
					"person"=>"飞流",
					"photo"=>"feiliu",
					"description"=>"曾被秘忍杀手组织以药物控制而导致心智不全，武功奇高，天下少有敌手，获救于梅长苏后，心中只有其一人，只听梅长苏一人的话，始终以一颗单纯之心陪伴着梅长苏一步步走完艰难的沉冤昭雪之路。"
				),
			);
			$candidates = count($docs);
			$index = rand(0, $candidates - 1);
			$choised = $docs[$index];//array_rand( $docs,  1);
	
			$persion=$choised["person"];
			$photo=$choised["photo"];
			$description = $choised["description"];
		
		return view('app.result')
			->with('name',$name)
			->with('person',$persion)
			->with('photo',$photo)
			->with('description',$description);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		
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
