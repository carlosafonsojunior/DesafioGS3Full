namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create($request->only(['name', 'email', 'password']));
        $user->profiles()->attach($request->profile_id);
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->only(['name', 'email', 'password']));
        $user->profiles()->sync($request->profile_id);
        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}

public function show(User $user)
{
    if (auth()->user()->id !== $user->id) {
        abort(403, 'Você não tem permissão para acessar essas informações.');
    }

    return response()->json($user);
}
