Hello manager. Here is the list of movies:

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->description }}</td>
        </tr>
        @endforeach

    </tbody>
</table>