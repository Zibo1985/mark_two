  <div>
      <section>
          <hgroup>
              <h3>ChatBot</h3>
              <p wire:stream="answer">{{ $answer }}</p>
          </hgroup>
      </section>

      <form wire:submit="ask">
          <button id="newName" wire:model.prevent="prompt" type="text" placeholder="Send a message" autofocus>new Name</button>
      </form>
      @script
      <script>
          function drueckeKnopf() {
              // Knopf mit der ID "newName" abrufen
              var knopf = document.getElementById("newName");
              // Klick-Ereignis für den Knopf auslösen
              knopf.click();
          }

          // Funktion aufrufen alle 2 Sekunden
          setInterval(drueckeKnopf, 2000);

      </script>

      @endscript
  </div>
