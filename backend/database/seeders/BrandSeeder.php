use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
public function run(): void
{
DB::table('brands')->insert([
['name' => 'Samsung', 'slug' => Str::slug('Samsung'), 'country' => 'South Korea'],
['name' => 'Apple', 'slug' => Str::slug('Apple'), 'country' => 'USA'],
]);
}
}
