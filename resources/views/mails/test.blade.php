
<x-mail::message>
# Order Shipped

<h1>Testing mail</h1>

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus ut sint cumque veniam, cupiditate eligendi maxime consequuntur omnis autem atque possimus natus. Suscipit illum expedita facere temporibus vel. Pariatur, aspernatur?</p>


<x-mail::table>
| Laravel       | Table         | Example       |
| ------------- | :-----------: | ------------: |
| Col 2 is      | Centered      | $10           |
| Col 3 is      | Right-Aligned | $20           |
</x-mail::table>

<x-mail::button color="success" :url="$url">
View Order
</x-mail::button>

</x-mail::message>
