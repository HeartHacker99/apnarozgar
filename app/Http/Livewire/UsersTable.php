<?php


namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        $route = Route::current()->getName();

        if($route == 'sellers')
        {
            return view('livewire.users-table', [
                'users' => User::search($this->search)->where('role', 1)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate($this->perPage),
            ]);
        }
        elseif($route == 'buyers')
        {

            return view('livewire.users-table', [
                'users' => User::search($this->search)->where('role', 0)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate($this->perPage),
            ]);
        }
        else{
            return view('livewire.users-table', [
                'users' => User::search($this->search)->where('role', '!=' ,2)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate($this->perPage),
            ]);
        }
    }
}
