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
        
        if(auth()->user()->admin=='yes') {
            $userTags='';
            return view('tasks.index', ['tasks' => Task::latest()->filter(request()->only([
                'tagPriority', 'tagStatus', 'search']), $userTags)->get()
            ]);
        }
        else{
            $userTags=auth()->user()->tags;
            return view('tasks.index', [
                'tasks' => Task::latest()->filter(request()->only([
                    'tagPriority', 'tagStatus', 'search']), $userTags)->get()
            ]);
        }  
    }

    public function termins(Request $request) {

        $terminsOrder = $request->session()->get('terminsOrder', 'desc');
        
        if ($terminsOrder == 'desc') {
            $terminsOrder = 'asc';
        } else {
            $terminsOrder = 'desc';
        }
        
        $request->session()->put('terminsOrder', $terminsOrder);
    
        return view('tasks.index', [
            'tasks' => DB::table('tasks')
                ->orderBy('duedate', $terminsOrder)
                ->get()
        ]);
    }

    public function prioritate(Request $request) {

        $sortOrder = $request->session()->get('sortOrderPriority', 'desc');
        
        if ($sortOrder == 'desc') {
            $sortOrder = 'asc';
        } else {
            $sortOrder = 'desc';
        }
        
        $request->session()->put('sortOrderPriority', $sortOrder);

        return view('tasks.index', [
            'tasks' => DB::table('tasks')
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
        
        $request->session()->put('sortOrderStatus', $sortOrder);

        return view('tasks.index', [
            'tasks' => DB::table('tasks')
                ->orderBy('status', $sortOrder)
                ->get()
        ]);
    }

    //single
    public function show(Task $task) {
        return view('tasks.show', [
            'task' => $task
        ]);
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

        return redirect('/')->with('message', 'Uzdevums veiksmīgi izveidots!');
    }

    public function edit(Task $task) {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, Task $task) {
        $formFields = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => 'required',
            'duedate' => ['required', 'date', 'after_or_equal:now'],
            'priority' => 'required',
            'tags'=> 'required'
        ]);

        $task->update($formFields);

        return back()->with('message', 'Uzdevums veiksmīgi rediģēts!');
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect('/')->with('message', 'Uzdevums veiksmīgi izdzēsts!');
    }
}
