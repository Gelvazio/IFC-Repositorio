'use strict';

module.exports = {
  up: (queryInterface, DataTypes) => {
    return queryInterface.createTable('events', {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: DataTypes.INTEGER,
      },
      name: {
        allowNull: false,
        type: DataTypes.STRING,
        length: 60,
      },
      year: {
        allowNull: false,
        type: DataTypes.INTEGER,
      },
      url: {
        allowNull: true,
        type: DataTypes.STRING,
      }
    })
  },

  down: (queryInterface, DataTypes) => {
    return queryInterface.dropTable('events')
  }
};