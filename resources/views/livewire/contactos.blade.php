<div>
    
        <form  method="POST"  class="php-email-form">
          <div class="row gy-4">
            <div class="col-lg-6 form-group">
              <input type="text"  wire:model.defer="nome" class="form-control" id="name" placeholder="O seu nome"  required>
            </div>
            <div class="col-lg-6 form-group">
              <input type="email" class="form-control"  wire:model.defer="email" id="email" placeholder="O seu email"  required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  wire:model.defer="assunto" id="subject" placeholder="Assunto" required>
          </div>
          <div class="form-group">
            <textarea class="form-control"  wire:model.defer="mensagem" rows="5" placeholder="Mensagem" required></textarea>
          </div>
          <div class="text-center"><x-jet-button class="ml-2" wire:click="create()" wire:loading.attr="disabled" >Enviar mensagem </x-jet-button></div>
        </form>
      
</div>
