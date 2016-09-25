SELECT books.title, books.author, categories.category from books, categories 
 where library.books.categoryid = library.categories.id;