use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhoneSeeder extends Seeder
{
public function run(): void
{
DB::table('phones')->insert([
[
'brand_id' => 1, // Samsung
'model_name' => 'Galaxy S25 Ultra',
'slug' => Str::slug('Samsung Galaxy S25 Ultra'),
'release_date' => 'Announced 2025, January',
'status' => 'Rumored',
]
]);
}
}
