
<?php include 'includes/header.php';

// function usuarioAutenticado(bool $autenticado): string
// {
//     if ($autenticado) {
//         return "El usuario esta autenticado";
//     } else {
//         return "El usuario no esta autenticado";
//     }
// }

// function usuarioAutenticado(bool $autenticado): void
// {
//     if ($autenticado) {
//         echo "El usuario esta autenticado";
//     } else {
//         echo "El usuario no esta autenticado";
//     }
// }

function usuarioAutenticado(bool $autenticado): string|int // ?string
{
    if ($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return 1;
    }
}

$usuario = usuarioAutenticado(true);
echo $usuario;

include 'includes/footer.php';
