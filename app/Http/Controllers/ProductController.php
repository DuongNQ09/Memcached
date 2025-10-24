namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {
        $products = Cache::remember('products', 60, function () {
            // Giả lập dữ liệu từ DB
            return [
                ['id' => 1, 'name' => 'iPhone 15'],
                ['id' => 2, 'name' => 'Samsung Galaxy S24'],
                ['id' => 3, 'name' => 'Xiaomi 14 Pro'],
            ];
        });

        return view('products', compact('products'));
    }
}