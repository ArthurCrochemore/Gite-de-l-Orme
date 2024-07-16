var pictures = ['jardin_gite.jpg',
              'acces_pavee.jpg',
              'dalle_pavee.jpg',
              'entree_terasse.jpg',
              'terrasse.jpg',
              'jardin.jpg',
              'jardin_gite.jpg',
              'jeux_enfants.jpg',
              'terrasse_3.jpg',
              'mare.jpg',
              'parking.jpg',
              'terrasse_nuit.jpg',
              'jeux_enfants_2.jpg',
              'terrasse_2.jpg',


              'vue_fenetre.jpg'];

var pictures_right = ['rez_cuisine.jpg',
                    'mezzanine.jpg',
                    'balancoire.jpg']

var pictures_left = ['chambre_2.jpg',
                    'cuisine.jpg',
                    'grande_chambre.jpg']
var i = 0;
var j = 0;
var k = 0;

var next = function() {
    if (i === 14) {
        i = 0;
    } else {
        i++;
    }
    if (j === 2) {
        j = 0;
    } else {
        j++;
    }
    var actual = document.getElementById('diapo');
    actual.src = 'les_photos/' + pictures[i];
    var actual = document.getElementById('right');
    actual.src = 'les_photos/' + pictures_right[j];
    var actual = document.getElementById('left');
    actual.src = 'les_photos/' + pictures_left[j];
};

var toEn = function() {
    var language = document.getElementById('language');
    language.textContent = 'EN/FR';
    var line = document.getElementById('l1');
    line.textContent = "Welcome to the Gîte de l'Orme, a very peaceful gite located near Le Havre and close to the beaches of Etretat and Honfleur. We offer you a peaceful and relaxing place, while remaining easily accessible thanks to its proximity to major roads.";
    var line = document.getElementById('l2');
    line.textContent = "The gite is located 15 minutes from the center/beach of Le Havre, 19 km from Etretat, and 22 km from Honfleur.";
    var line = document.getElementById('l3');
    line.textContent = "This place was formerly a Norman farm, and the barn has been converted into a house. We retained the Norman style during the renovation, with a brick and flint structure. Part of the home was still unoccupied, so we decided to turn it into a gite to allow people like you to come and spend relaxing holidays here.";
    var line = document.getElementById('l4');
    line.textContent = "You can park for free in the private property (set back of the public road and away from prying eyes). You can also park several vehicles and/or trucks.";
    var line = document.getElementById('l5');
    line.textContent = "The gite is fully equiped and has 2 bedrooms (one with a double bed and another with 2 bunk beds) as well as a mezzanine with a sofa-bed which that can be used as a 3rd bedroom. You can also find a living room with a corner kitchen (microwave, fridge, oven, hotplates, cafetiere, ketle, TV), a shower room and a patio outside with a barbecue.";
    var line = document.getElementById('l6');
    line.textContent = "The gite is also equiped of a washing machine, just as laundry line on the patio, where you may hang your washing out. We supply you the linen for the bed.";
    var line = document.getElementById('l8');
    line.textContent = "For the children, an indoor play area with a hut and a reading/playing corner is available to them, just as a crossbar outside.";
    var line = document.getElementById('l9');
    line.textContent = "Our gite is ideal for week's trips or for weekend ones, with attractives prices with our conditions. For school holiday, prices start at 290€ per week, or from 350€ per week during 'smalls hollidays'. In July and August, prices range from 380€ to 590€ per week, with a discount for long stay of several consecutives weeks. We can offer you specials costs for extended stay, starting at 37€ per night under the conditions.";
    var line = document.getElementById('l10');
    line.textContent = "The WIFI is free (with a very good reception, allowing you to connect multiple apparels at the same time)."
    var line = document.getElementById('l11');
    line.textContent = "The rates include water, electricity and heating, with WIFI being for free.";
    var line = document.getElementById('l13');
    line.textContent = "The gite is non-smoking (however, you can smoke outside) and we do not allow pets. It is also not suitable for peoples with reduced mobility (there is no elevator).";
    var line = document.getElementById('l14');
    line.textContent = "The gite is registered at the town hall and has a prefectural rank of 1 star. The tourist tax is of level 1* : 0.80€/night/adult; free for minors";
    var line = document.getElementById('l15');
    line.textContent = "If you would like to see more pictures or a personalized quotation, please contact us by mail. Indicate in the mail the period you are considering coming and the number of peoples, adults and childrens. We will reply as soon as possible.";
    var line = document.getElementById('final');
    line.textContent ="See you soon.";

    this.removeEventListener('click',toEn);
    this.addEventListener('click',toFr);
    }

var toFr = function() {
    var language = document.getElementById('language');
    language.textContent = 'FR/EN';
    var line = document.getElementById('l1');
    line.textContent = "Bienvenue au Gîte de l'Orme, un gîte très calme située près du Havre et à proximité des plages d'Etretat et d'Honfleur. Nous vous proposons un environnement paisible et reposant, tout en restant aisément accessible grâce à sa proximité des grands axes routiers.";
    var line = document.getElementById('l2');
    line.textContent = "Le gîte se trouve à environ 15 minutes du Havre centre/ plage, 19 km d'Etretat et 22 km d'Honfleur.";
    var line = document.getElementById('l3');
    line.textContent = "Autrefois, cet endroit était une ferme normande dont l'étable a été transformée en maison. Nous avons conservé le style normand lors de sa rénovation, avec une structure en brique et silex. Une partie de la demeure étant inoccupée, nous avons décidé de l'aménager en gîte, afin de permettre à des personnes comme vous de venir y passer des vacances reposantes.";
    var line = document.getElementById('l4');
    line.textContent = "Le stationnement est gratuit dans propriété privée (en retrait de la voie publique et à l'abri des regards indiscrets). Il vous est également possible de stationner plusieurs véhicules et/ou camions.";
    var line = document.getElementById('l5');
    line.textContent = "Notre gîte est entièrement équipé, il comprend 2 chambres (une avec un lit double et l'autre avec 2 lits superposés) ainsi qu'une mezzanine avec un canapé-lit pouvant être utilisé comme une 3ème chambre. Vous trouverez également une pièce de vie avec coin cuisine (micro-ondes, réfrigérateur, congélateur, four, plaque de cuisson, cafetière, bouilloire, TV), une salle de douche et une terrasse avec barbecue.";
    var line = document.getElementById('l6');
    line.textContent = "Il est également équipé d'un lave linge ainsi que de fils au niveau de la terasse, pour y étendre le linge. Nous fournissons le linge de lit.";
    var line = document.getElementById('l8');
    line.textContent = "Pour les enfants, un espace de jeux intérieur avec cabane et coin lecture/jeux est à leur disposition, ainsi qu'un portique extérieur.";
    var line = document.getElementById('l9');
    line.textContent = "Notre gîte est idéal pour des séjours en semaine ou en week-end, avec des tarifs attractifs selon les conditions. Pour les vacances scolaires, comptez à partir de 290€ la semaine, ou à partir de 350€ la semaine en petites vacances. En juillet et août, les tarifs varient de 380€ à 590€ la semaine, avec une remise pour les séjours de plusieurs semaines consécutives. Nous proposons également des tarifs spéciaux pour les longues périodes, à partir de 37€ par nuit selon les conditions.";
    var line = document.getElementById('l10');
    line.textContent = "Le WIFI est gratuit (avec une très bonne réception, permettant de se connecter à plusieurs en même temps).";
    var line = document.getElementById('l11');
    line.textContent = "Les tarifs comprennent l'eau, l'électricité et le chauffage, la WIFI étant gratuite.";
    var line = document.getElementById('l13');
    line.textContent = "Le gîte est non-fumeur (il est cependant possible de fumer à l'extérieur) et ne peut accueillir d'animaux. Il n'est pas adapté aux personnes à mobilité réduite (étage sans ascenseur).";
    var line = document.getElementById('l14');
    line.textContent = "Le gîte est déclaré en Mairie. Son classement préfectoral est de 1 étoile. La taxe de séjour est de niveau 1*: 0,80€/nuit/adulte; gratuit pour les mineurs";
    var line = document.getElementById('l15');
    line.textContent = "Pour plus de photos ou pour obtenir un devis personnalisé, n'hésitez pas à nous contacter par mail en indiquant la période souhaitée ainsi que le nombre de personnes adultes et enfants. Nous vous répondrons rapidement.";
    var line = document.getElementById('final');
    line.textContent = "En espérant vous voir bientôt.";

    this.removeEventListener('click',toFr);
    this.addEventListener('click',toEn);
    }

var setUpListeners = function () {
    var language = document.getElementById('language');
    language.addEventListener('click',toEn);
}

window.addEventListener('load', setUpListeners);
var myVar = setInterval(next, 2000);
