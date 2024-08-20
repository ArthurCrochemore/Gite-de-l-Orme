import "../styles/style-contact.css";

export default function Page() {
  return (
    <div id="main" class="main-centered">
      <h1 id="title">Contacts :</h1>
      <hr />

      <div class="main-container">
        <form id="contactForm" onsubmit="submitForm(event)">
          <h2 class="h3">Contactez-nous par mail</h2>

          <div>
            <label class="h4" for="fmail">
              Email
            </label>
            <input
              type="email"
              id="fmail"
              name="fmail"
              placeholder="Votre mail.."
              aria-label="Email"
              required
              class="h5"
            />
          </div>

          <div>
            <label class="h4" for="fobjet">
              Objet
            </label>
            <input
              type="text"
              id="fobjet"
              name="fobjet"
              placeholder="Objet .."
              aria-label="Objet"
              required
              class="h5"
            />
          </div>

          <div>
            <label class="h4" for="subject">
              Sujet
            </label>
            <textarea
              id="subject"
              name="subject"
              placeholder="Ecrivez ici.."
              aria-label="Sujet"
              required
              class="h5"
            ></textarea>
          </div>

          <input type="submit" value="Submit" />
        </form>
        <div class="others-container">
          <img src="/images/retro-phone.jpg" alt="jardin_gite" />
        </div>
      </div>
    </div>
  );
}
