<div>
    <div>
        <label for="month">Кол. Месяцев</label>
        <input type="nubmer" id="month" wire:model="month">

        <label for="procentage">Процентная Ставка</label>
        <input type="nubmer" id="procentage" wire:model="procentage">

        <label for="sum">Сумма</label>
        <input type="nubmer" id="sum" wire:model="sum">

        <button type="button" wire:click="math()">math</button>
    </div>
    <div>
        <h4 class="text-center">
            {{ $total }}
        </h4>
    </div>
</div>
