<section>
            <h3>Contact</h3>
        </section>
        <section>
            <h3>Formulaire de contact</h3>
            <form method="GET" action="url-traitement.php">
                <!-- formulaire contact -->
                <!-- nom, email et message du visiteur -->
                <label for="contact-nom">Nom</label>
                <input type="text" placeholder="entrez votre nom" name="nom" required id="contact-nom">
                <label for="contact-email">Email</label>
                <input type="email" placeholder="entrez votre email" name="email" required id="contact-email">
                <label for="contact-message">Message</label>
                <textarea name="contact-message" id="contact-message" placeholder="entrez votre message" cols="80" rows="6" required></textarea>
                <button type="submit">Envoyer le message</button>
            </form>
        </section>