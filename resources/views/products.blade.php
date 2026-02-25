<h1>Daftar Produk</h1>
<p>Kategori: {{ $category }}</p>
<ul>
    <li><a href="{{ url('/category/food-beverage') }}">Food & Beverage</a></li>
    <li><a href="{{ url('/category/beauty-health') }}">Beauty & Health</a></li>
    <li><a href="{{ url('/category/home-care') }}">Home Care</a></li>
    <li><a href="{{ url('/category/baby-kid') }}">Baby & Kid</a></li>
</ul>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Produk {{ $category }} A</td>
        <td>{{ $category }}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Produk {{ $category }} B</td>
        <td>{{ $category }}</td>
    </tr>
</table>
<br>
<a href="{{ url('/') }}">Kembali ke Home</a>
