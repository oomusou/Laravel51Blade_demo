<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<div>
    <?php $locale = App::getLocale(); ?>
    @foreach($users as $user)
        <div>
            <h2>{{ $user->name }}</h2>
            <h2>{{ $user->email }}</h2>
            @if($locale === 'uk')
                <h2>{{ $user->created_at->format('d, M, Y') }}</h2>
            @elseif($locale === 'tw')
                <h2>{{ $user->created_at->format('Y, m, d') }}</h2>
            @else
                <h2>{{ $user->created_at->format('M, d, Y') }}</h2>
            @endif
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>