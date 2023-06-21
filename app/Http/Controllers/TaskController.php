<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //all
    public function index() {
        
        if(auth()->user()->admin) {
            $userTags=['Kolektīvs','Apkalpojošais','Finanses'];
        }

        else{
            $userTags=auth()->user()->tags;
            if (is_string($userTags)) {
                $userTags = [$userTags,'Kolektīvs'];
            }
        }

        return view('tasks.index', [
            'tasks' => Task::latest()->filter(request()->only([
                'tagPriority', 'tagStatus', 'search', ]))->whereIn('tags', $userTags)->get()
        ]);
    }

    public function termins(Request $request) {

        $terminsOrder = $request->session()->get('terminsOrder', 'desc');
        
        if ($terminsOrder == 'desc') {
            $terminsOrder = 'asc';
        } else {
            $terminsOrder = 'desc';
        }

        if(auth()->user()->admin) {
            $userTags=['Kolektīvs','Apkalpojošais','Finanses'];
        }
        else{
            $userTags=auth()->user()->tags;
            if (is_string($userTags)) {
                $userTags = [$userTags,'Kolektīvs'];
            }
        }
        
        $request->session()->put('terminsOrder',$terminsOrder);

        $tasks = DB::table('tasks')
                ->whereIn('tags', $userTags)
                ->orderBy('duedate', $terminsOrder)
                ->get();

        return view('tasks.index', compact('tasks'));  
            
    }

    public function prioritate(Request $request) {

        $sortOrder = $request->session()->get('sortOrderPriority', 'desc');
        
        if ($sortOrder == 'desc') {
            $sortOrder = 'asc';
        } else {
            $sortOrder = 'desc';
        }

        if(auth()->user()->admin) {
            $userTags=['Kolektīvs','Apkalpojošais','Finanses'];
        }
        else{
            $userTags=auth()->user()->tags;
            if (is_string($userTags)) {
                $userTags = [$userTags,'Kolektīvs'];
            }
        }
        
        $request->session()->put('sortOrderPriority', $sortOrder);

        return view('tasks.index', [
            'tasks' => DB::table('tasks')
                ->whereIn('tags', $userTags)
                ->orderBy('priority', $sortOrder)
                ->get()
        ]);
    }

    public function statuss(Request $request){

        $sortOrder = $request->session()->get('sortOrderStatus', 'desc');
        
        if ($sortOrder == 'desc') {
            $sortOrder = 'asc';
        } else {
            $sortOrder = 'desc';
        }

        if(auth()->user()->admin) {
            $userTags=['Kolektīvs','Apkalpojošais','Finanses'];
        }
        else{
            $userTags=auth()->user()->tags;
            if (is_string($userTags)) {
                $userTags = [$userTags,'Kolektīvs'];
            }
        }
        
        $request->session()->put('sortOrderStatus', $sortOrder);

        return view('tasks.index', [
            'tasks' => DB::table('tasks')
                ->whereIn('tags', $userTags)
                ->orderBy('status', $sortOrder)
                ->get()
        ]);
    }

    //single
    public function show(Task $task) {
        if(auth()->user()->admin) {
            $userTags=['Kolektīvs','Apkalpojošais','Finanses'];
        }
        else{
            $userTags=auth()->user()->tags;
            if (is_string($userTags)) {
                $userTags = [$userTags,'Kolektīvs'];
            }
        }
        
        foreach ($userTags as $tag) {
            if ($tag == $task['tags'] || auth()->user()->admin) {
                return view('tasks.show', [
                    'task' => $task
                ]);
            }
        }
    
        return redirect('/')->with('message', __('messages.admin'));
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('tasks', 'title'), 'max:255'],
            'description' => 'required',
            'duedate' => ['required', 'date', 'after_or_equal:now'],
            'priority' => 'required',
            'tags'=> 'required'
        ]);

        Task::create($formFields);

        return redirect('/')->with('message', __('messages.success'));
    }

    public function edit(Task $task) {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, Task $task) {
        $formFields = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => 'required',
            'duedate' => ['required', 'date', 'after_or_equal:now'],
            'priority' => 'required'
        ]);

        $task->update($formFields);

        return redirect('/')->with('message', __('messages.cedit'));
    }

    public function updatestatus(Request $request, Task $task){
        $formFields = $request->validate([
            'status' => 'required'
        ]);

        if($task->status=='Iesniegts'){
            $task->status = 'Gaida iesniegumu';
            $task->save();
        }

        else{
            $task->status = $formFields['status'];
            $task->save();
        }

        return redirect('/');
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect('/')->with('message',  __('messages.cdel'));
    }
}
