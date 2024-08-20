import "../styles/style-gallerie.css";

export default function Page() {
  return (
    <div id="main" class="main-centered">
      <h1 id="title">Gallerie :</h1>
      <hr />

      <div id="sub-main">
        <h2>Extérieur</h2>
        <div class="card">
          <img src="/images/jardin_gite.jpg" alt="jardin_gite" />
        </div>
        <div class="card">
          <img src="/images/balancoire.jpg" alt="jardin_gite" />
        </div>
        <div class="card">
          <img src="/images/acces_pavee.jpg" alt="jardin_gite" />
        </div>
        <div class="card">
          <img src="/images/dalle_pavee.jpg" alt="jardin_gite" />
        </div>
        <div class="card">
          <img src="/images/entree_terasse.jpg" alt="jardin_gite" />
        </div>
        <div class="card">
          <img src="/images/jardin.jpg" alt="jardin_gite" />
        </div>
        <div class="card">
          <img src="/images/jeux_enfants.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/jeux_enfants_2.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/vue_fenetre.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/parking.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/terrasse.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/terrasse_2.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/terrasse_3.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/terrasse_nuit.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/mare.jpg" alt="mezzanine" />
        </div>
        <hr />

        <h2>Rez de Chaussé</h2>
        <div class="card">
          <img src="/images/rez_cuisine.jpg" alt="rez_cuisine" />
        </div>
        <div class="card">
          <img src="/images/chambre_2.jpg" alt="chambre_2" />
        </div>
        <div class="card">
          <img src="/images/cuisine.jpg" alt="cuisine" />
        </div>
        <div class="card">
          <img src="/images/grande_chambre.jpg" alt="grande_chambre" />
        </div>
        <div class="card">
          <img src="/images/rez_tv.jpg" alt="grande_chambre" />
        </div>
        <hr />

        <h2>Etage</h2>
        <div class="card">
          <img src="/images/mezzanine.jpg" alt="mezzanine" />
        </div>
        <div class="card">
          <img src="/images/cabane.jpg" alt="mezzanine" />
        </div>
      </div>
    </div>
  );
}
