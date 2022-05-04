<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $view="create";  

    public $title,$body;

    public function store(){

        $this->validate(['title'=>'required', 'body'=>'required']);
        Post::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
        
    }

    public function render()
    {
        return view('livewire.post-component',[
            'post'=>Post::orderBy('id','desc')->paginate(8)
        ]);
    }

    public function edit($id){

        $post=Post::find($id);
        $this->title=$post->title;
        $this->body=$post->body;

        $this->view="edit";
    }
    public function destroy($id){
        Post::destroy($id);
    }
    
}
