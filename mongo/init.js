db.createCollection('notes');
db.notes.insertMany([
  {
    "name": "Mongo Database",
    "e-mail": "mongo@database.com"
  },
  {
    "name": "Test User",
    "e-mail": "test@mail.com"
  }
]);