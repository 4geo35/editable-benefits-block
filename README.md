### Установка

Добавить в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-benefits-block/src/resources/views/livewire/admin/**/*.blade.php",
    "./vendor/4geo35/editable-benefits-block/src/resources/views/admin/**/*.blade.php",
    "./vendor/4geo35/editable-benefits-block/src/resources/views/components/**/*.blade.php",

Добавить в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-benefits-block/src/resources/views/components/**/*.blade.php",

#### Views

Сокращение для представлений: `ebb`

#### Config

Название файла: `editable-benefits-block`  
Название типа блока: `benefits`

- `perCol` => `3`: количество элементов в строке при выводе. Возможные значения `3` или `4`
