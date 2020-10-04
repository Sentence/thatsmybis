@php
    $raid = ($character->raid_id ? $guild->raids->where('id', $character->raid_id)->first() : null);
@endphp
<li class="list-inline-item text-{{ $character->inactive_at ? 'muted' : strtolower($character->class) }}">
    <div class="dropdown">
        <a class="dropdown-toggle text-{{ $character->inactive_at ? 'muted' : strtolower($character->class) }}" id="character{{ $character->id }}Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="role-circle" style="background-color:{{ $raid ? $raid->getColor() : null }}"></span>
            {{ $character->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="character{{ $character->id }}Dropdown">
            <a class="dropdown-item" href="{{ route('character.show', ['guildId' => $guild->id, 'guildSlug' => $guild->slug, 'characterId' => $character->id, 'nameSlug' => $character->slug]) }}" target="_blank">
                Profile
            </a>
            <a class="dropdown-item" href="{{ route('guild.auditLog', ['guildId' => $guild->id, 'guildSlug' => $guild->slug, 'character_id' => $character->id]) }}" target="_blank">
                Logs
            </a>
            <a class="dropdown-item" href="{{ route('character.edit', ['guildId' => $guild->id, 'guildSlug' => $guild->slug, 'characterId' => $character->id, 'nameSlug' => $character->slug]) }}" target="_blank">
                Edit
            </a>
            <a class="dropdown-item" href="{{ route('character.loot', ['guildId' => $guild->id, 'guildSlug' => $guild->slug, 'characterId' => $character->id, 'nameSlug' => $character->slug]) }}" target="_blank">
                Loot
            </a>
            <span class="dropdown-item disabled">
                @if ($raid)
                    @include('partials/raid', ['raidColor' => $raid->getColor()])
                @else
                    no raid
                @endif
            </span>
            @if ($character->inactive_at)
                <span class="dropdown-item disabled font-weight-bold text-danger">
                    INACTIVE
                </span>
            @endif
        </div>
    </div>
</li>
