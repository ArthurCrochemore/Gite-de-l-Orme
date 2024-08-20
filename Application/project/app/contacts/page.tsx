import "../styles/style-contact.css";

export default function Page() {
  return (
    <div id="main" class="main-centered">
      <h1 id="title">Contacts :</h1>
      <hr />

      <div class="main-container container">
        <form id="contactForm" onsubmit="submitForm(event)">
          <h2>Contactez-nous par mail</h2>

          <label for="fmail">Email</label>
          <input
            type="email"
            id="fmail"
            name="fmail"
            placeholder="Votre mail.."
            aria-label="Email"
            required
          />

          <label for="fobjet">Objet</label>
          <input
            type="text"
            id="fobjet"
            name="fobjet"
            placeholder="Objet .."
            aria-label="Objet"
            required
          />

          <label for="subject">Sujet</label>
          <textarea
            id="subject"
            name="subject"
            placeholder="Ecrivez ici.."
            aria-label="Sujet"
            required
          ></textarea>

          <input type="submit" value="Submit" />
        </form>

        <div class="container others-container">
          <h2>Téléphone</h2>
          <p>+33 7 82 32 70 31</p>
        </div>
      </div>
    </div>
  );
}
