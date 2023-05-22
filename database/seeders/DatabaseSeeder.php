<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEven

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::factory()->create([
            'name' => 'Himo',
            'email' => 'himo@gmail.com',
            
        ]);

        User::factory()->create([
            'name' => 'Camila',
            'email' => 'camila@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Paula',
            'email' => 'paula@gmail.com',

        ]);

        // Recipe::factory(10)->create();

        Recipe::factory()->create([
                'title' => 'Paella',
                'imgRecipe' => 'https://nomen.es/wp-content/uploads/2020/09/trucos-paella-perfecta.jpg',
                'description' => 'Plato de arroz seco, con carne, pescado, mariscos, legumbres, etc., característico de la región valenciana, en España.',
                'timeCook' => '25 minutos',
                'portions' => '4 porciones',
                'ingredients' => 'Arroz, pimineto rojo, cebolla, ajo, aceite de oliva, sal, mejillones, anillas de calamar, gambas, cigalas',
                'instructions' => '1. Preparar el sofrito en una sartén rehogando en aceite en primer lugar, la cebolla y el hasta estar dorados ligeramente, seguidamente añadir el pimiento rojo y el pimiento verde y dejar cocinar hasta que estén también dorados. Añadir el tomate y dejar cocinar hasta obtener un sofrito., 2.Dorar el calamar y los langostinos en la paellera, retirar.,
                3.Incorporar el arroz, sofreírlo ligeramente para nacararlo, añadir el sofrito y remover bien a fin de integrar todos los ingredientes.,
                4.Agregar 750ml de agua, llevar a ebullición y disolver 2 pastillas de caldo Knorr.,
                5.Añadir los mejillones, las almejas y los langostinos y dejar cocinar unos 15 minutos. ',
        ]);

        Recipe::factory()->create([
                'title' => 'Macarrones con atún y tomate. Receta de pasta',
                'imgRecipe' => 'https://www.recetasderechupete.com/wp-content/uploads/2020/11/Macarrones-con-atun-y-tomate.jpg',
                'description' => 'Recetas con pocos ingredientes · Recetas de atún · Recetas de macarrones · Recetas de pasta · Recetas de pasta fáciles · Recetas de pescado para niños · Recetas de pescado y marisco · Recetas fáciles y rápidas · Recetas para la cena · Recetas para niños',
                'timeCook' => '30 minutos',
                'portions' => '4 porciones',
                'ingredients' => '400 gr de macarrones,1 cebolla grande,800 g. de tomate triturado, 1 cucharadita de azúcar (opcional), 200 g. de atún al natural en conserva, Aceite de oliva virgen extra
                , Sal, Queso rallado tipo Gouda, Edam u otro que funda bien',
                'instructions' => '1.Pelamos la cebolla y picamos finamente. Calentamos un poco de aceite de oliva en una cazuela y pochamos la cebolla picada a fuego suave durante aproximadamente 10 minutos o hasta que esté traslúcida. No dejéis que se dore porque puede amargar la salsa., 2.A continuación añadimos el tomate triturado, todo de golpe. Si usamos tomate de lata, no tenemos más que abrir la lata y punto, pero si usamos tomate natural necesitaremos lavar bien cada pieza, triturar y pasar por un chino o colador para retirar los restos de pieles y pepitas., 3.Agregamos también un poco de azúcar. Sí los tomates no son de temporada o son tomates de lata, tienden a ser demasiado ácidos. Por eso, con esto contrarrestamos sabores. ,4.Sazonamos y cocemos a medio-bajo suave durante 15 o 20 minutos o hasta obtener el punto de espesor que más os guste. A mí me gusta la salsa de tomate espesa, así que la reduzco bastante. Al gusto. ,5.Sí salpica mucho la salsa colocamos la tapa de la cacerola, pero sin cerrar y dejando una pequeña abertura. Esto permitirá que se vaya evaporando el líquido y que los salpicones no pongan todo perdido., 6.Mientras se hace la salsa de tomate ponemos a hervir abundante agua con sal en una cacerola. Usamos 1 litro y 10 gramos de sal por cada 100 gramos de pasta utilizados, según marcan los cánones italianos., 7.Añadimos los macarrones y dejamos cocer un minuto menos del tiempo que nos recomienda el  fabricante. En este el fabricante recomienda 8 minutos, así que los cocemos solo 7 minutos. Escurrimos los macarrones y los refrescamos bajo el grifo de agua fría para cortar la cocción., 8.Volvemos a la salsa para comprobar el punto de la misma y añadir el atún, bien escurrido, y cocer un par de minutos más. Probamos el punto de sal y rectificamos si fuera necesario., 9.Cuando la salsa esté lista añadimos los macarrones a la misma, mezclamos bien para que la pasta se empape del sabor de la salsa y damos un hervor corto de un minuto. Servimos caliente en la mesa y acompañamos cada plato con un poco de atún y queso rallado al gusto.',
        ]);

        Recipe::factory()->create([
            'title' => 'Alitas de pollo',
            'imgRecipe' => 'https://img-global.cpcdn.com/recipes/46beee30343bc3cf/640x640sq70/photo.webp',
            'description' => 'Las alitas de pollo son un plato alitas de pollo condimentadas',
            'timeCook' => '35 minutos',
            'portions' => '2-4 raciones',
            'ingredients' => '1 kg alitas de pollo, Aceite de oliva, Ajo en polvo,
            Sal de cebolla, Pimentón dulce, Pimentón picante, al gusto Pimienta
            Salsa barbacoa (Mercadona), Orégano',
            'instructions' => '1. Alíñamos las alitas: - Chorro aceite
            - Ajo en polvo 3 cucharaditas
            - Sal de cebolla 3 cucharaditas
            - Pimentón dulce 3 cucharaditas
            - Orégano 3 cucharaditas
            - Pimentón picante 2 cucharaditas
            - Pimienta al gusto
            2. Precalentamos Cosori 250 grados 5 min
            3. Incorporamos las alitas en la Cosori y preparamos 190 grados 20 min (agitamos cada 10 min)
            4. Una vez terminado el tiempo, pintamos las alitas con salsa barbacoa y darle toque final 205 grados (Max) 5 min',
    ]);
    }
}

