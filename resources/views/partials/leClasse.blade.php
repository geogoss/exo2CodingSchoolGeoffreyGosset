<section class="w-50 mx-auto">
    <table class="table table-danger table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">objet</th>
                <th scope="col">fonction</th>
                <th scope="col">quantité</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $item)
            <tr>
                <th scope="row">{{ $item->id }} </th>
                <td>{{ $item->objet }}</td>
                <td>{{ $item->fonction }}</td>
                <td>{{ $item->quantité }}</td>
            </tr>
                @endforeach
        </tbody>
    </table>
</section>
