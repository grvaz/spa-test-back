<?php

use App\Services\Api;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
;
Route::get('/', function () {
    dd(\Cache::get('refresh_token'));
//   $result = json_decode(
//       Api::http()->request('post', '/oauth2/access_token', [
//           'form_params' => [
//               'client_id' => config('amo.client_id'),
//               'client_secret' => config('amo.secret_key'),
//               'grant_type' => 'refresh_token',
//               'redirect_uri' => config('amo.redirect_uri'),
//               'refresh_token' => \Cache::get('refresh_token')
//           ]
//       ])->getBody()->getContents(),
//       true
//   );
//   dd($result);
//    \Cache::set('refresh_token', 'def50200e5107be41e7cda281bc517e76334b8c607b0365d7422cd4a363bc158290417396d3ec4c99ee89aaf17393703506c79e2b04daaae9ec0ba27cc83b141e0a9c1cea32bfb292ee7b9b25081f6f739e2777f559c315e8b3bf6bd4d74e3712b7770f7e2f4797c50e376b11653b7854e1d854387879075033b32fa10a88ee2bb22834a6c270306f982dc6a9a647990c1baebe9a61addac81a17c9f18c99d80c9ac046be17956b65852d7d1673a5fde31f1bcaaddbde40fffcd8570ebef47c1db03fe14fa12b4191f66a37dff013e4295dfcc71572cd84bef90dcc75916b8fa26df6da7b99e4f414d5ab107fdb9c75d44db656eb263df4959040c5a7f5ef7e21853c711402327670583ccac2cebf3a03447b6e1222627795196ec0ef8e97da156c3cda483bf1d5878f5cf7a9fc1617aef57d006b96dc44258c649f9d6abd7db183ca3808c7d94c87f9c1408c268634c8dce6e2c399e1131949c18bcdf34be2886bedc298f067eede6c72deef317e694f35570dd2323e32435a03b7c74d661f0308abd663c7014adc5f454213bad84aab99d604841192388f4e0e73c7e7fcd7e517bc68d6872c8703b031d65ee884090b9de4028c1fc95a6593f7a1546c43c9ee9d70c9ff0cb9987f51a3097125d5a8795c8951e96ddad5c37309f6f6e174e06f8f23f8e040a021de41189e49eb3e37e36');
    //return view('welcome');
});



//at
/*eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImZiYWMzM2MwMDIwOTI1OGQ4MmVmZGE3YmU5NWFiYzJhNGM3ZTQ1ZTkzNGE0YjhlYzcyNjQ5YTQ4YzIyNDhmMjI5NDllZTE4YmZkMTU0OWIzIn0.eyJhdWQiOiJiNDM5NzkyZi1kY2FlLTRjZDYtOWFlZi04MTNkNmUzYTVhYWUiLCJqdGkiOiJmYmFjMzNjMDAyMDkyNThkODJlZmRhN2JlOTVhYmMyYTRjN2U0NWU5MzRhNGI4ZWM3MjY0OWE0OGMyMjQ4ZjIyOTQ5ZWUxOGJmZDE1NDliMyIsImlhdCI6MTY5NTg3NDI3OSwibmJmIjoxNjk1ODc0Mjc5LCJleHAiOjE2OTU5NjA2NzksInN1YiI6IjEwMTM5NDE0IiwiZ3JhbnRfdHlwZSI6IiIsImFjY291bnRfaWQiOjMxMzE4NDE0LCJiYXNlX2RvbWFpbiI6ImFtb2NybS5ydSIsInZlcnNpb24iOiJ2MiIsInNjb3BlcyI6WyJwdXNoX25vdGlmaWNhdGlvbnMiLCJmaWxlcyIsImNybSIsImZpbGVzX2RlbGV0ZSIsIm5vdGlmaWNhdGlvbnMiXX0.cGImM4RbtqkqbGrRqrb25ytoB3oekHyTiidxmG6aksrHNimvOEkIw5FMnzsz7BlVB3AmsfXSJNrnCztfNACD4kxmHEfe6HqwK8YHcCezoxMH_w52gMGoPfUtvPkRPNxUPTu2rFtVT0pYLubgaiS2n4ElrV3P4lj-hh9pl5qHwlkunob1VEH7PWghPzGmDFwVkX5z3s1NNhBlKQe1nywt2t-okT2OKtGoXYT1CZo5MPJIA8wVwoL00A5lkGGWsKMTrGDeuGsD3tnWZmXIzXN6HA7nkylOvUHtNs5OG6RRrvYFBveQDm1UAeGwdnP0mosZNOKAr54JVVREyNWc0QPwdg*/
//rt
/*def502005c7e3c022439c7c927685aa9635f59c039838313e8eb3a4a9f0575406d3aaf0d616bad9e513053c0910ca8d1daaa409dbda33de00230e368e4193de6ceb70785227fe5188becee86d149e083b86590fd4cd0a0173b2b678766246c32aa1c1d0cdefb96ddd8c5a3dee552df6d3274db691e07c61539a6550facdde44a510c1164c7c42800bac43f2f55c662715f9063ab2a6f4526b0e72592d56e2e2852f4bc8411aa2579304fd106314cf3d6949805136dc687cfe6db7409bc0e9d16b24cccdb4fda9829e9dcd5def5afab6ee4d96bdd855f4307870fdf6b78bb17b7c0ef404db69364a479d329194c8684278fd9e3a18b855ee2a3245013dfe4b2c903be7c6d7c8706213b16cd0a8edce0b2c7b4a9fc7c62e02aea85b27db333064a496bbc06a7a17427f019630f69aeb533339fcf9feeee202e6973681e30596fdd6e6854fdbe9316a70eb2be4fe935c3c36cad36a0b663cb05d244e155618328594fe0afc7a2f92708b64f1cd0c7d69a6acb32a5c6ad887f3181b51ad7547b3c9e8b96b0545cdc759e6f9959c505e029f453125b46c7db214db113971bc62469d6f9d233cd9a995a4290c0b66c5dce9468871f26924c5129616e704c1abf3416c918145ce67a12a1b62603174ef77aab3028093e2bf59904c2b1dcb48e2eae73d628755153583b1e26c5eb4947974ff8bcd7*/
