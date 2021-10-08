## Conceito
[<img src="/images/logo-fflch.png" width="80"/>](/images/logo-fflch.png)

Biblioteca personalizada para laravel-stepper da FFLCH

## Biblioteca Utilizada
- https://github.com/AXN-Informatique/laravel-stepper

## Instalação
```bash
    composer require fflch/laravel-fflch-stepper
```
## Configurações e uso:
- Publicação do arquivo de configuração:
```bash
    php artisan vendor:publish --provider="Fflch\LaravelFflchStepper\LaravelFflchStepperServiceProvider" --tag="config"
```

- Edite o arquivo config/laravel-fflch-stepper.php conforme suas necessidades.

- Injete no controller (Exemplo):
```bash
    use Fflch\LaravelFflchStepper\Stepper;

    public function show(Pedido $pedido, Stepper $stepper)
    {
        $stepper->setCurrentStepName($pedido->status);
        return view('pedidos.show',[
            'pedido' => $pedido,
            'stepper' => $stepper->render()
        ]);
    }
```

- No blade posicione onde deseja mostrar o stepper:
```bash
    {!! $stepper !!}
```
