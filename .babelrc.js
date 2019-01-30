const presets = [
	"@babel/preset-react"
];
const plugins = [
	"@babel/plugin-proposal-class-properties",
	"@babel/plugin-transform-runtime",
	"@babel/plugin-transform-arrow-functions",
	"@babel/plugin-syntax-dynamic-import",
	// [
		// "module-resolver",
		// {
			// root: ["./src"]
		// }
	// ],
	// ["import-rename", { "^(.*)\\.jsx$": "$1" }]
];

module.exports = { presets, plugins };
