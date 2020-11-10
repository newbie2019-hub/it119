module.exports = {
  pages: {
    'index': {
      entry: './src/pages/index/main.js',
      template: 'public/index.html',
      title: 'Dashboard',
      chunks: ['chunk-vendors', 'chunk-common', 'index']
    },
    'books': {
      entry: './src/pages/books/books.js',
      template: 'public/index.html',
      title: 'Books Management',
      chunks: ['chunk-vendors', 'chunk-common', 'books']
    },
    'patron': {
      entry: './src/pages/patron/patron.js',
      template: 'public/index.html',
      title: 'Patron Management',
      chunks: ['chunk-vendors', 'chunk-common', 'patron']
    },
    'settings': {
      entry: './src/pages/settings/settings.js',
      template: 'public/index.html',
      title: 'Settings',
      chunks: ['chunk-vendors', 'chunk-common', 'settings']
    },

  }
}