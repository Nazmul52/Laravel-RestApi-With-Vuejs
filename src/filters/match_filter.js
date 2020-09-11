export default {
    matchFilter(matchList, tournament_name) {
        return matchList.filter(match => match.tournament_name === tournament_name);
    }
}
