<!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class DocterAIController extends Controller
// {
//     private $skin_problem_types = ['acne', 'dryness', 'fine_lines', 'hyperpigmentation'];

//     private function treat_skin_problem($skin_problem) {
//         switch ($skin_problem) {
//             case 'acne':
//                 return 'For acne, I recommend a gentle cleanser, spot treatment, and a non-comedogenic moisturizer.';
//             case 'dryness':
//                 return 'For dry skin, I recommend a rich moisturizer, a hydrating serum, and a facial spray.';
//             case 'fine_lines':
//                 return 'For fine lines, I recommend a rich moisturizer, eye cream, and a facial spray.';
//             case 'hyperpigmentation':
//                 return 'For hyperpigmentation, I recommend a chemical peel, vitamin C serum, and a moisturizer with SPF.';
//             default:
//                 return 'Sorry, I didn\'t understand your skin problem.';
//         }
//     }

//     private function get_product_recommendations($skin_problem) {
//         $products = [];
//         switch ($skin_problem) {
//             case 'acne':
//                 $products = [
//                     ['Cetaphil Gentle Skin Cleanser', '13.00'],
//                     ['Paula\'s Choice 2% BHA Liquid', '25.00'],
//                     ['Neutrogena Hydrating Facial Moisturizer', '15.00'],
//                 ];
//                 break;
//             case 'dryness':
//                 $products = [
//                     ['L\'Oreal Paris Hydrafull Balance & Glow Moisturizer', '20.00'],
//                     ['La Roche-Posay Toleriane Ultra Night Moisturizer', '30.00'],
//                 ];
//                 break;
//             case 'fine_lines':
//                 $products = [
//                     ['Olay Regenerist Micro-Sculpting Cream', '30.00'],
//                     ['La Roche-Posay Pigmentclar Eye Cream', '40.00'],
//                 ];
//                 break;
//             case 'hyperpigmentation':
//                 $products = [
//                     ['Vichy Idéalia Brightening Moisturizer', '25.00'],
//                     ['La Roche-Posay Pigmentclar Duo', '35.00'],
//                 ];
//                 break;
//             default:
//                 $products = [];
//         }
//         return $products;
//     }

//     private function sort_products_by_value($products) {
//         usort($products, function ($a, $b) {
//             return strnatcasecmp($a[1], $b[1]);
//         });
//         return $products;
//     }

//     public function analyze(Request $request) {
//         $skin_problem = $request->input('skin_problem');
//         $treatment_plan = $this->treat_skin_problem($skin_problem);
//         $products = $this->get_product_recommendations($skin_problem);
//         $sorted_products = $this->sort_products_by_value($products);

//         return view('docter.result', compact('treatment_plan', 'sorted_products'));
//     }
// }

