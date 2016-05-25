ag.ns("agit.common");

(function(){
    var
        pad = function(num, len)
        {
            return ag.ui.tool.fmt.numpad(num, len || 2);
        };

    ag.common.Date = function(yearOrString, month, day)
    {
        if (typeof(yearOrString) === "string")
        {
            this.fromString(yearOrString);
        }
        else
        {
            var now = day ? null : new Date();

            this.d = day || now.getUTCDate();
            this.m = month || now.getUTCMonth() + 1;
            this.y = yearOrString || now.getUTCFullYear();
        }
    };

    ag.common.Date.prototype.toNumber = function()
    {
        return this.y * 10000 + this.m * 100 + this.d;
    };

    ag.common.Date.prototype.toString = function()
    {
        return pad(this.y, 4) + "-" + pad(this.m) + "-" + pad(this.d);
    };

    // expects a string such as "2020-12-30"
    ag.common.Date.prototype.fromString = function(value)
    {
        var parts = value.split("-").map(function(part){ return parseInt(part); });

        if (parts[0] >= 1900 && parts[0] <= 2100 && parts[1] >= 1 && parts[1] <= 12 && parts[2] >= 1 && parts[2] <= 31)
        {
            this.y = parts[0];
            this.m = parts[1];
            this.d = parts[2];
        }
    };

    ag.common.Date.prototype.format = function(fmt)
    {
        var date = new Date(new Date(Date.UTC(this.y, this.m - 1, this.d, 0, 0, 0)));
        return ag.ui.tool.date.format(date, fmt);
    };

    ag.common.Date.prototype.compare = function(day)
    {
        var
            d1 = this.toNumber(),
            d2 = day.toNumber(),
            ret = 0;

        if      (d1 > d2)   ret = 1;
        else if (d1 < d2)   ret = -1;

        return ret;
    };

    ag.common.Date.prototype.getDate = function()
    {
        return new Date(Date.UTC(this.y, this.m - 1, this.d));
    };

    ag.common.Date.prototype.clone = function()
    {
        return new ag.common.Date(this.y, this.m, this.d);
    };

    ag.common.Date.prototype.diff = function(offset)
    {
        var date = this.getDate();

        date.setUTCDate(date.getUTCDate() + offset);

        return new ag.common.Date(date.getUTCFullYear(), date.getUTCMonth() + 1, date.getUTCDate());
    };
})();
