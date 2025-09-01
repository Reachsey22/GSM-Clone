use App\Models\Brand;

class BrandController extends Controller
{
public function index()
{
    $brands = Brand::orderBy('name')->get();
    return response()->json($brands);
    }
}s
