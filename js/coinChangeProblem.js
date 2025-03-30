function coinChange(coins, amount) {
    // Initialize an array to store the minimum number of coins for each amount from 0 to the target amount.
    const dp = new Array(amount + 1).fill(Infinity);
    
    // Base case: To make an amount of 0, we need 0 coins.
    dp[0] = 0;
    
    // Loop through each coin denomination
    for (let coin of coins) {
        // For each coin, loop through all amounts from the coin's value to the target amount
        for (let i = coin; i <= amount; i++) {
            // Update the dp array with the minimum number of coins needed for each amount
            console.log(i, '------------------', coin, i - coin, Math.min(1,2,3));
            dp[i] = Math.min(dp[i], dp[i - coin] + 1);
            console.log(dp[i], '------------------');
        }
    }
    
    // If the amount is still infinity, return -1 (not possible to make the amount with given coins)
    return dp[amount] === Infinity ? -1 : dp[amount];
}

// Example usage:
const coins = [1, 2, 5];
const amount = 11;
const result = coinChange(coins, amount);
console.log(result); // Output: 3 (5 + 5 + 1)
