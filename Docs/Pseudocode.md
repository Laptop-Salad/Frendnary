# High-Level Pseudocode

## Navbar (on every page)

```
If logged in:
  Display logged in navbar
Else:
  Default navbar
```

## Every Page

### Catching notifications
Other pages may send notifications through url, for example: <br>
<img width="420" alt="image" src="https://github.com/Laptop-Salad/Frendnary/assets/80591698/6dfc4246-c921-44e8-9c19-d6e800cd6bc5">


```
If query string has notice & type of notice:
  Display type of notice
```

There will be a base controller/view that will know all the types of notices that can be displayed.

## Home "/" [GET]

## Dashboard "/dasboard" [GET]

## Backend
```
Get username
Get all friend groups
```

## Frontend
```
Display username

For each friend group:
  Display name
  Display link friendgroup/{name}
```

## Signup "/signup" [GET, POST]

### Frontend

```
As username changes do:
  If username exists:
    Update useravail -> "Username is Available" (green)
  Else
    Update useravail -> "Username isn't Available" (red)

  If 3 or more characters:
    Update userChar -> "Has 3 or more characters" (green)
  Else:
    Update userChar -> "Needs to have 3 or more characters" (red)

As password changes do:
  If password has capital letter:
    Update passCapital -> "Has a capital letter" (green)
  Else:
    Update passCapital -> "Needs to have a capital letter" (red)

  If password has a number:
    Update passNum -> "Has a number" (green)
  Else:
    Update passNum -> "Needs to have a number" (red)

  If password has a special character:
    Update passSpecial -> "Has a special character" (green)
  Else:
    Update passSpecial -> "Does not have a special character" (red)

  If password has 8 or more characters:
    Update passChar -> "Has 8 or more characters" (green)
  Else:
    Update passChar -> "Needs to have 8 or more characters" (red)

As confirm password changes do:
  If passwords match:
    Update passMatch -> "Passwords match" (green)
  Else:
    Update passMatch -> "Passwords do not match" (red)
```

### Backend


```
Validate username:
  Ensure username doesn't already exist. 
  Ensure username has 3 or more characters.

  Ensure password has a capital letter.
  Ensure password has a number.
  Ensure password has a special character.
  Ensure password has a 8 or more characters.

  Ensure confirm password matches password.

  If any point anything is not valid:
    Send notice through query string to /signup and kill. Tell user what was wrong "passwords did not match", etc.

```

## Login "/login" [GET]

```

```

## Create Friend Group "/newgroup" [GET, POST]

## Friend Group "/friendgroup/{name}" [GET]

## Invite Group "/friendgroup [POST]

## New Definition "/newdef" [GET, POST]
