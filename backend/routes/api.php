use App\Http\Controllers\Api\PhoneController;

// ... other routes

Route::get('/phones', [PhoneController::class, 'index']);
