
<h3>
    Editar Publicacion
</h3>
<br>
@include('livewire.form')
<br>
git config --global user.email "perlaxd365@gmail.com"
  git config --global user.name "Perla"
<button wire:click="update" class="btn btn-primary">Actualizar</button>
<button wire:click="default" class="btn btn-secondary">Cancelar</button>