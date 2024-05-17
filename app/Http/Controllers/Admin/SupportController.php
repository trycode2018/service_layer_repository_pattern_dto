<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;
use App\Services\SupportService;

class SupportController extends Controller
{

    public function __construct(protected SupportService $service){

    }

    public function index(Request $request){
        

        $supports = $this->service->getAll($request->filter);

        return view('admin/supports/index',compact('supports'));
    }

    public function create(){
        return view('admin/supports/create');
    }

    public function store(Request $request,Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('supports.index');
    }

    public function show(string $id){

        //Support::where('id',$id)->first()
        //Support::where('id','!=',$id)->first()
        if( !$support = $this->service->findOne($id) )
        {
            return back();
        }

        return view('admin/supports/show',compact('support'));
    }

    public function edit(string $id)
    {

        //if(!$support = $support->where('id',$id)->first()){
        if(!$support = $this->service->findOne($id)){
            return back();
        }

        return view('admin/supports/edit',compact('support'));
    }

    public function update(Request $request,Support $support,string|int $id)
    {
        if(!$support = $support->find($id)){
            return back();
        }

        $support->update($request->only([
            'subject','body'
        ]));

        return redirect()->route('supports.index');
    }
}
