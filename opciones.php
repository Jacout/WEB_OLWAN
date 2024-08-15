// Crea el arreglo de opciones
$opciones = array(
  'opcion1' => 'Opción 1',
  'opcion2' => 'Opción 2',
  'opcion3' => 'Opción 3'
);

// Crea el select
$select = '<select>';

// Agrega opciones
foreach ($opciones as $value => $text) {
  $select .= '<option value="' . $value . '">' . $text . '</option>';
}

// Cierra el select
$select .= '</select>';

// Imprime el select
echo $select;