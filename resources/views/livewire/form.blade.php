<form>
    <div class="form-group">
        <label>Título</label>
        <input  type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" placeholder="Ingresa un título">
         
@error('title')
<div class="alert alert-danger">Por favor ingresa un título</div>
@enderror
    </div>
    <br>
    <div class="form-group">
        <label>Descripción</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="body" placeholder="Ingresa una descripción">
        
    </div>
</form>
