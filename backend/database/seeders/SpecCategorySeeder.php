use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecCategorySeeder extends Seeder
{
public function run(): void
{
DB::table('spec_categories')->insert([
['name' => 'Network', 'order' => 1],
['name' => 'Launch', 'order' => 2],
['name' => 'Body', 'order' => 3],
['name' => 'Display', 'order' => 4],
['name' => 'Platform', 'order' => 5],
['name' => 'Memory', 'order' => 6],
]);
}
}
