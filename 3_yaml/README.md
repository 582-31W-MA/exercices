# Exercice : YAML

Le but de cet exercice est de vous familiariser avec YAML, le langage utilisé pour configurer le *panel* de Kirby. YAML est également utilisé par Symphony, Drupal et phpMyAdmin comme format d'entrée et de sortie. Il donc est important de bien comprendre sa structure.

Traduisez le code JSON suivant en YAML.

### Exercice 1

```json
{
	"name": "Alice",
	"age": 25,
	"email": "alice@example.com",
	"pets": {
		"dog": "Buddy",
		"cat": "Mittens"
	}
}
```

### Exercice 2

```json
[
	{
		"name": "John",
		"age": 30
	},
	{
		"name": "Sarah",
		"age": 25
	},
	{
		"name": "Bob",
		"age": 40
	}
]
```

### Exercice 3

```json
{
	"name": "David",
	"age": 35,
	"address": {
		"street": "456 Oak Ave",
		"city": "San Francisco",
		"state": "CA",
		"zip": "94102"
	}
}
```

### Exercice 4

```json
{
	"name": "Mark",
	"age": 42,
	"books": [
		{
			"title": "The Great Gatsby",
			"author": "F. Scott Fitzgerald"
		},
		{
			"title": "To Kill a Mockingbird",
			"author": "Harper Lee"
		},
		{
			"title": "1984",
			"author": "George Orwell"
		}
	]
}
```

### Exercice 5

```json
{
	"name": "Sam",
	"age": 27,
	"contact": {
		"email": "sam@example.com",
		"phone": {
			"home": "555-1234",
			"work": "555-5678"
		}
	},
	"education": {
		"degree": "Bachelor of Science",
		"major": "Computer Science",
		"courses": [
			{
				"name": "Data Structures",
				"credits": 4,
				"instructor": {
					"name": "Dr. Smith",
					"email": "smith@example.com",
					"phone": {
						"home": "555-4321",
						"work": "555-8765"
					}
				}
			},
			{
				"name": "Algorithms",
				"credits": 4,
				"instructor": {
					"name": "Dr. Johnson",
					"email": "johnson@example.com",
					"phone": {
						"home": "555-9876",
						"work": "555-5432"
					}
				}
			}
		]
	}
}
```
