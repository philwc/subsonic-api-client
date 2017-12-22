# subsonic-api-client
## PHP Client For Subsonic

### Usage

Create a new configuration object:

```php
// Assumes the config items are in the environment (via dotenv etc.)
$config = new \philwc\Configuration(getenv('SUBSONIC_URL'), getenv('SUBSONIC_USER'), getenv('SUBSONIC_PASSWORD'))
```

Either set the config into the ClientFactory:

```php
\philwc\ClientFactory::setConfiguration($config);
```

Or pass into each `ClientFactory::get()` call:

```php
$createPlaylist = \philwc\ClientFactory::get(\philwc\Call\Playlist\CreatePlaylist::class, $config);
```

To make the call, invoke the class:

```php
$createPlaylist(['name' => 'Test Playlist', 'songId' => 1]);
```

Each call class can receive different parameters and will return a different result. 

Use `getAvailableFields()`, `getRequiredFields()`, `getResponseClass()` as appropriate.

Currently, the following calls are implemented:

#### Playlist
- CreatePlaylist
- DeletePlaylist
- GetPlaylist
- GetPlaylists
- UpdatePlaylist

#### Searching
- Search2

#### System
- GetLicense
- Ping
