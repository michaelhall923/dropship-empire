const brain = require('brain.js');
const { range } = require('lodash');
const data = require('./data.json');

const network = new brain.NeuralNetwork({
    // binaryThresh: 0.5,
    hiddenLayers: [4], // array of ints for the sizes of the hidden layers in the network
    // activation: 'sigmoid', // supported activation types: ['sigmoid', 'relu', 'leaky-relu', 'tanh'],
    // leakyReluAlpha: 0.01, // supported for activation type 'leaky-relu'
});

// const trainingData = data.map(item => ({
//     input: item.input,
//     output: item.output
// }));
const trainingData = [{
        input: [0,0,0,1, 0,0,0,1],
        output: [0, 0, 0, 1]
    },
    {
        input: [0,0,0,1, 0,0,1,1],
        output: [0, 0, 1, 1]
    },
    {
        input: [0,0,0,1, 5],
        output: [0, 1, 0, 1]
    },
    {
        input: [1, 7],
        output: [0, 1, 1, 1]
    },
    {
        input: [1, 9],
        output: [1, 0, 0, 1]
    },
    {
        input: [1, 11],
        output: [1, 0, 1, 1]
    },
    {
        input: [1, 13],
        output: [1, 1, 0, 1]
    },
    {
        input: [1, 15],
        output: [1, 1, 1, 1]
    },
    {
        input: [2, 3],
        output: [0, 1, 1, 0]
    },
    {
        input: [2, 5],
        output: [1, 0, 1, 0]
    },
    {
        input: [2, 7],
        output: [1, 1, 1, 0]
    },
    {
        input: [3, 4],
        output: [1, 1, 0, 0]
    }
];


network.train(trainingData, {
    iterations: 200000,
    // timeout: 3000
});

const tests = [
    [1, 1],
    [1, 2],
    [1, 3],
    [1, 4],
    [1, 5],
    [1, 6],
    [1, 7],
    [1, 8],
    [1, 9],
    [1, 10],
    [1, 11],
    [1, 12],
    [1, 13],
    [1, 14],
    [1, 15],
    [2, 2],
    [2, 3],
    [2, 4],
    [2, 5],
    [2, 6],
    [2, 7],
    [3, 3],
    [3, 4],
    [3, 5],
];



tests.forEach((test) => {
    var output = network.run(test);
    console.log(`${test}: ${output}`)
});
