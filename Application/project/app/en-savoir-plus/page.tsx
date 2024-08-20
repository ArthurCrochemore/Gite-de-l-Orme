import "../styles/style-en-savoir-plus.css";

export default function Page() {
  return (
    <div id="main" className="main-centered">
      <img
        src="/images/jardin_gite.jpg"
        alt="The garden of the Gite de l'Orme"
        id="back-picture"
      />
      <div id="text">
        <div id="text-top">
          <h1 id="title">En Savoir Plus</h1>
          <hr />
        </div>

        <div className="text">
          <section class="white">
            <h2 class="h3">Bienvenue au Gîte de l'Orme</h2>
            <p>
              Un gîte très calme situé près du Havre et à proximité des plages
              d'Etretat et d'Honfleur. Nous vous proposons un environnement
              paisible et reposant, tout en restant aisément accessible grâce à
              sa proximité des grands axes routiers.
            </p>
            <p>Le gîte se trouve à environ :</p>
            <ul>
              <li>15 minutes du Havre centre/plage</li>
              <li>19 km d'Etretat</li>
              <li>22 km d'Honfleur</li>
            </ul>
          </section>

          <section id="first" class="green">
            <img src="/images/rez_cuisine.jpg" className="pictures" id="left" />
            <div className="text-content">
              <h3 class="h4">Histoire du Gîte</h3>
              <p>
                Autrefois, cet endroit était une ferme normande dont l'étable a
                été transformée en maison. Nous avons conservé le style normand
                lors de sa rénovation, avec une structure en brique et silex.
              </p>
              <p>
                Une partie de la demeure étant inoccupée, nous avons décidé de
                l'aménager en gîte, afin de permettre à des personnes comme vous
                de venir y passer des vacances reposantes.
              </p>
            </div>
          </section>

          <section class="grey">
            <h3 class="h4">Commodités du Gîte</h3>
            <ul>
              <li>
                Stationnement gratuit dans une propriété privée, à l'abri des
                regards indiscrets.
              </li>
              <li>
                Deux chambres : une avec un lit double, l'autre avec 2 lits
                superposés, et une mezzanine avec un canapé-lit pouvant servir
                de 3ème chambre.
              </li>
              <li>
                Pièce de vie avec coin cuisine (micro-ondes, réfrigérateur,
                congélateur, four, plaque de cuisson, cafetière, bouilloire,
                TV).
              </li>
              <li>Salle de douche et terrasse avec barbecue.</li>
              <li>
                Équipé d'un lave-linge et d'un espace pour étendre le linge sur
                la terrasse.
              </li>
              <li>Linge de lit fourni.</li>
            </ul>
          </section>

          <section id="second" class="green">
            <img src="/images/chambre_2.jpg" className="pictures" id="right" />
            <div className="text-content">
              <h3 class="h4">Tarifs et Disponibilités</h3>
              <p>
                Notre gîte est idéal pour des séjours en semaine ou en week-end,
                avec des tarifs attractifs selon les conditions :
              </p>
              <ul>
                <li>
                  A partir de 290€ la semaine pour les vacances scolaires.
                </li>
                <li>
                  De 350€ à 590€ la semaine en juillet et août, avec des remises
                  pour les séjours prolongés.
                </li>
                <li>
                  Tarifs spéciaux pour les longues périodes, à partir de 37€ par
                  nuit.
                </li>
              </ul>
              <p>
                Le WIFI est gratuit avec une très bonne réception, permettant de
                se connecter à plusieurs en même temps.
              </p>
              <p>
                Les tarifs comprennent l'eau, l'électricité et le chauffage.
              </p>
            </div>
          </section>

          <section class="white">
            <h3 class="h4">Informations supplémentaires</h3>
            <ul>
              <li>
                Le gîte est non-fumeur (il est possible de fumer à l'extérieur).
              </li>
              <li>Les animaux ne sont pas acceptés.</li>
              <li>
                Non adapté aux personnes à mobilité réduite (étage sans
                ascenseur).
              </li>
              <li>
                Classé 1 étoile par la préfecture, avec une taxe de séjour de
                0,80€/nuit/adulte.
              </li>
            </ul>
          </section>

          <section class="black">
            <h3 class="h4">Contactez-nous</h3>
            <p>
              Pour plus de photos ou pour obtenir un devis personnalisé,
              n'hésitez pas à nous contacter par mail en indiquant la période
              souhaitée ainsi que le nombre de personnes adultes et enfants.
              Nous vous répondrons rapidement.
            </p>
          </section>

          <section class="green">
            <p id="final" class="h1">
              En espérant vous voir bientôt.
            </p>
          </section>
        </div>
      </div>
    </div>
  );
}
