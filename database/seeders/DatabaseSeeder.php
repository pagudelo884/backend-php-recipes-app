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

    Recipe::factory()->create([
        'title' => 'Jugo de Lulo',
        'imgRecipe' =>'https://urbanorestaurante.com/101-home_default/jugo-de-lulo.jpg',
        'description' =>'En Colombia se preparan todo tipo de zumo de frutas, gracias a la variedad de frutas tropicales presentes en la región. El jugo de lulo se puede preparar con agua o con leche',
        'timeCook' => '15 minutos',
        'portions' => '4',
        'ingredients' =>'-12 lulos
        -4 vasos agua o leche a gusto
        -Azúcar',
        'instructions' =>'1. Pelar los lulos y colarlos en un cedazo con un poco de azúcar',

    ]);

    Recipe::factory()->create([
        'title' => 'Bizcocho de helado',
        'imgRecipe' =>'https://www.petitchef.es/imgupl/recipe/bizcocho-de-helado-receta-facil-anti-desperdicio--454556p705119.jpg',
        'description' =>'Con esta receta podrás preparar un delicioso bizcocho de helado con solo tres ingredientes. Puedes variar el sabor según el helado que escojas',
        'timeCook' => '35-40 minutos',
        'portions' => '5',
        'ingredients' =>'-600 g de helado (elige el sabor que más te guste)
        -210 g de harina
        -15 g de levadura química',
        'instructions' =>'1. Sacar el helado del congelador con tiempo suficiente para hacer la receta. Debe quedar cremoso pero no líquido (aproximadamente una hora).
        2. Precalentar el horno a 180ºC y engrasar el molde con mantequilla.
        3. Poner el helado en un bol y añadir la harina y la levadura. Remover bien con unas varillas y verter la mezcla en el molde preparado.
        4. Hornear durante unos 35 o 40 minutos.
        Puedes añadir nueces picadas y cualquier otro ingrediente que desees a la mezcla antes de hornear para personalizar tu bizcocho.',

    ]);

    Recipe::factory()->create([
        'title' => 'Sushi',
        'imgRecipe' =>'https://www.petitchef.es/imgupl/recipe/sushi-facil-y-economico--441531p682918.jpg',
        'description' =>'Esta receta es para 2 personas y el tiempo total de preparación es de 35 minutos (15 minutos de elaboración y 20 minutos de cocción)',
        'timeCook' => '25 minutos',
        'portions' => '2',
        'ingredients' =>'-100 g de arroz para sushi
        -Alga nori
        -50 g de salmón fresco
        -1 aguacate
        -1 pepino
        -Vinagre
        -Azúcar
        -Sal',
        'instructions' =>'1.Prepara el arroz: cocina el arroz (tipo glutinoso o especial para sushi) y después enfríalo con un abanico tras aliñarlo con vinagre, azúcar y sal.
        2.Prepara una juliana de aguacate y haz lo mismo con el pepino para tenerlo listo cuando vayas a formar los makis.
        3.Corta el salmón eligiendo la zona de la ventresca para darle unos cortes en tiras.
        4.Corta la hoja de alga nori en dos y ponla sobre una esterilla o makisu forrada de film transparente de cocina dejando el lado rugoso arriba.
        5.Extiende el arroz sobre el alga nori presionando un poco para que se adhiera.
        6.En el centro del arroz, coloca las tiras de pescado, el pepino y el aguacate y opcionalmente, un poco de wasabi si te gusta el toque picante.
        7.Enrolla el alga ayudados con la esterilla y forma un cilindro.
        8.A la hora de servirlo hay que cortarlo en 8 porciones, ayudados de un cuchillo humedecido para que no se nos quede pegado el arroz .',

    ]);

    Recipe::factory()->create([
        'title' => 'Tacos de Carne',
        'imgRecipe' =>'',
        'description' =>'Esta receta es para 2 personas y el tiempo total de preparación es de 60 minutos.',
        'timeCook' => '60 minutos',
        'portions' => '2',
        'ingredients' =>'-1 libra de carne molida de res
        -Sal y pimienta al gusto
        -4 dientes de ajo cortados finamente
        -1/2 taza de cebolla cortada finamente
        -5 cucharaditas de aceite de maíz
        -1 cucharadita de paprika
        -1 sobre de Crema de Tomate MAGGI®
        -2 tazas de agua
        -2 tazas de tomate cortado en cubos pequeños
        -3/4 taza de cebolla morada cortada finamente
        -1/4 taza de jugo de limón
        -2 cucharadas de aceite de oliva
        -1/2 taza de cilantro cortado finamente
        -Sal y pimienta al gusto
        -16 tortillas de trigo
        -1 1/2 taza de queso americano',
        'instructions' =>'1.Combina la carne molida con sal y pimienta y deja marinar por 5 minutos.
        2.En una cacerola a fuego alto, vierte el aceite y sofríe el ajo y la cebolla hasta que estén dorados.
        3.Pon a fuego medio, agrega la carne, la paprika y cocina por 10 minutos revolviendo constantemente.
        4.En otro tazón, diluye la Crema de Tomate MAGGI® en el agua. Vierte esta mezcla en la cacerola junto a la carne, revuelve y cocina por 15 minutos. Retira del fuego y reserva.
        5.En otro tazón, mezcla el tomate, la cebolla, el limón, el aceite, el cilantro, la sal y la pimienta y deja marinar por 15 minutos en el refrigerador.
        6.Calienta las tortillas en el horno por 1 o 2 minutos.
        7.En cada tortilla coloca 3 cucharadas de carne, 2 cucharadas de pico de gallo y una cucharada de queso americano',

    ]);

        Recipe::factory()->create([
            'title' => 'Empanadas porteñas al estilo de Doña Petrona',
            'imgRecipe' => 'https://img-global.cpcdn.com/recipes/aebb79668542d305/640x640sq70/photo.webp',
            'description' => 'empanada argentina tiene, por lo general, forma semicircular y va cerrada con un “repulgue” con formas distintas según el sabor del relleno. En éste es donde está la diferencia, ya que varía según la provincia en al que nos encontremos',
            'timeCook' => '60 minutos',
            'portions' => '36 unidades',
            'ingredients' => 'Masa:
            500 grs harina
            125 grs grasa de vaca
            1 huevo
            1 cucharadita sal fina
            200 ml agua tibia
            Aceite o grasa para freír
            Relleno:
            500 grs carne de vaca, carnaza, picada
            200 grs grasa
            2 cebollas pequeñas
            1/2 ají (pimiento) verde
            1/2 cucharada pimentón dulce
            1/2 cucharada ají picante molido
            75 grs pasas de uva
            Aceitunas verdes
            1/2 cucharadita azúcar
            1 huevo duro
            Sal',
            'instructions' => '1. Para el relleno poner la grasa en una sartén y cuando esté caliente incorporar las cebollas picaditas hasta que estén blandas. Añadir el ají picado, la carne y dejar un momento removiendo continuamente. Quitar del fuego y añadir el pimentón, el ají molido, las pasas de uva, las aceitunas troceaditas, sal, azúcar y los huevos picados. Dejar 24 hs en la nevera. 
            2. Para preparar la masa poner la harina en forma de volcán y colocar en el centro el resto de ingredientes. El agua, yo la pongo templada y en la que diluyo la sal, la voy agregando poco a poco porque de esa forma no me paso de líquido. Mezclar y amasar la masa, debe quedar elástica. Hacer un bollo y dejar descansar unos 30´ tapada
            3. Estirar fino el bollo con un palote y cortar tapas del tamaño que se quiera y poner un poco de relleno frío
            4. cabar de armar todas las empanadas y freír en aceite o grasa. Yo pongo mitad de grasa y mitad de aceite neutro, no demasiado fuerte. Escurrir en papel de cocina.',
    ]);

        Recipe::factory()->create([
            'title' => 'Pie de Limon',
            'imgRecipe' => 'https://img-global.cpcdn.com/recipes/e47c3f027291f50a/640x640sq70/photo.webp',
            'description' => 'es una combinación de base crujiente, con relleno cremoso de limón y una capa de merengue',
            'timeCook' => '60 minutos',
            'portions' => '6 raciones',
            'ingredients' => '📝 Cremoso de Limón
            250 g Zumo limón
            204 g Yemas
            96 g Claras
            150 g Azúcar grano
            150 g Mantequilla
            ralladura de 2 limones
            📝 Merengue Italiano
            250 g Claras
            100 g Agua
            400 g Azúcar grano
            100 g Glucosa',
            'instructions' => '1. Para el cremoso.. Calentar el zumo, las ralladuras, las yemas, las claras y el azúcar. 
            2. Cocer hasta los 85 ºC, retirar del fuego, colar y dejar que repose
            3. Cuando haya bajado a los 45ºC añadimos la mantequilla y emulsiónamos
            4. Dosificar sobre las tartaletas y dejar bloquear en frío
            5. Para el merengue…Batimos las claras a baja velocidad
            Mientras en un cazo ponemos en este orden, agua, azúcar y glucosa a media fuego
            6.Cuando empiece a hervir subir a tope de calor y las claras a media velocidad
            Cuando llegue el almíbar a 121 ºC retirar del fuego
            7. Con la batidora a media velocidad incorporar al hilo el almíbar, Seguir batiendo hasta que las paredes del cazo de la batidora este frío, Poner sobre una manga y decorar la tartaleta al gusto',
    ]);

        Recipe::factory()->create([
            'title' => 'Cachopo relleno de calabacín jamón serrano y queso',
            'imgRecipe' => 'https://img-global.cpcdn.com/recipes/e47c3f027291f50a/640x640sq70/photo.webp',
            'description' => 'es una combinación de base crujiente, con relleno cremoso de limón y una capa de merengue',
            'timeCook' => '40 minutos',
            'portions' => '2 raciones',
            'ingredients' => '2 filetes de ternera grandes
            3-4 lonchas jamón serrano
            3 lonchas del queso que más os guste
            1/2 calabacín
            Harina
            3 Huevos
            Pan rallado
            Aceite girasol
            Sal',
            'instructions' => '1. Coger los filetes 1 a uno y ponerlos entre 2 hojas de papel de horno y con un mazo aplastamos hasta que nos queden más finos pero sin romperse. 
            2. Salpimentamos filetes. Cortamos el medio calabacín en rodajas finitas y reservamos
            3. Cogemos un filete extendido y sobre él colocamos el jamón, el queso y el calabacín previamente cortado.
            4. Colocamos el otro filete por encima y que encaje bien con el de abajo para que no se salga el relleno al freirlo
            5. Pasamos por harina luego por huevo y por último por pan rallado.
            6. Con una sartén grande y el aceite para freírlocaliente, echamos el cachopo. Lo dejamos unos 3-4 min hasta que veamos que está dorado y le damos la vuelta. Dejamos otros 3-4 minutos y listo.
            7. Yo lo he acompañado con una ensalada mixta, también lo podéis acompañar con unas patatas fritas!',
    ]);

        Recipe::factory()->create([
            'title' => 'Ensalada César',
            'imgRecipe' => 'https://img-global.cpcdn.com/recipes/251129f64a69597b/1360x964cq70/ensalada-cesar-foto-principal.webp',
            'description' => 'es una ensalada de lechuga romana y croûtons (trozos de pan tostado) con jugo de limón, aceite de oliva, huevo, salsa Worcestershire',
            'timeCook' => '10 minutos',
            'portions' => '2 raciones',
            'ingredients' => 'Lechuga
            Pollo
            Queso semiduro
            Salsa césar
            Picatostes
            1 huevo duro',
            'instructions' => '1. Mezclar todos estos ingredientes para la ensalada. Yo le agregue 1 huevo duro. 
            2. Por encima la salsa.',
    ]); 

    }
}

