<section class="w-50 mx-auto">
    <table class="table table-warning table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Firstname</th>
                <th scope="col">age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <th scope="row">{{ $item->id }} </th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->firstname }}</td>
                <td>{{ $item->age }}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</section>
