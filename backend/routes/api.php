use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\PhoneController; // Make sure this is added

// ...

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/phones', [PhoneController::class, 'index']); // And this line exists
